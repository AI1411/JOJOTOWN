<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Symfony\Component\HttpFoundation\Response;

class AuthCheckFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function パウワードリセットページが正常なレスポンスを返すか()
    {
        $this->get(route('password.reset', $this->faker->uuid))
            ->assertStatus(Response::HTTP_OK);
    }

    /** @test */
    public function 登録時のバリデーションメッセージが表示されるか()
    {
        $this->post(route('register'), [])
            ->assertStatus(Response::HTTP_FOUND)
            ->assertSessionHasErrors();
    }

    /** @test */
    public function 新規登録できるかどうか()
    {
        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => 'password',
            'password_confirmation' => 'password'
        ];

        $this->post(route('register'), $data)
            ->assertStatus(302)
            ->assertRedirect(route('home'));
    }

    /** @test */
    public function 新規登録画面が表示されるか()
    {
        $this->get(route('register'))
            ->assertStatus(200)
            ->assertSee('名前')
            ->assertSee('メールアドレス')
            ->assertSee('パスワード')
            ->assertSee('パスワード確認');
    }

    /** @test */
    public function ログインフォームがちゃんと表示されているかどうか()
    {
        $this->get(route('login'))
            ->assertStatus(200)
            ->assertSee('メールアドレス')
            ->assertSee('パスワード')
            ->assertSee('ログイン')
            ->assertSee('パスワードを忘れた方')
            ->assertSee('新規登録へ');
    }

    /** @test */
    public function ログイン後のアカウントページへのリダイレクト()
    {
        $user = factory(User::class)->create();

        $data = [
          'email' => $user->email,
          'password' => 'password'
        ];

        $this->post(route('login'), $data)
        ->assertStatus(302)
        ->assertRedirect(route('home'));
    }
}
