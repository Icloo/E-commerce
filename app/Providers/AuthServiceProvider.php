<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('update-article', function (User $user, Article $article) {
            return $user->id == $article->user_id;
        });

        Gate::define('destroy-article', function (User $user, Article $article) {
            return $user->id == $article->user_id;
        });

        Gate::define('create-article', function (User $user, Article $article) {
            return $user->id == 1;
        });
    }
}
