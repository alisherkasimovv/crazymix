<?php

declare(strict_types=1);

use App\Orchid\Screens\Basic\BasicListScreen;
use App\Orchid\Screens\Basic\BasicEditScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\Social\SocialEditScreen;
use App\Orchid\Screens\Social\SocialListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\Work\WorkEditScreen;
use App\Orchid\Screens\Work\WorkListScreen;
use App\Orchid\Screens\WorkType\WorkTypeEditScreen;
use App\Orchid\Screens\WorkType\WorkTypeListScreen;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)->name('platform.main');

Route::screen('basic/{basic?}', BasicEditScreen::class)->name('platform.basic.edit');
Route::screen('basics', BasicListScreen::class)->name('platform.basics');

Route::screen('work/{work?}', WorkEditScreen::class)->name('platform.work.edit');
Route::screen('works', WorkListScreen::class)->name('platform.works');

Route::screen('work-type/{work-type?}', WorkTypeEditScreen::class)->name('platform.workType.edit');
Route::screen('work-types', WorkTypeListScreen::class)->name('platform.workTypes');

Route::screen('social/{social?}', SocialEditScreen::class)->name('platform.social.edit');
Route::screen('socials', SocialListScreen::class)->name('platform.socials');

// Users...
Route::screen('users/{users}/edit', UserEditScreen::class)->name('platform.systems.users.edit');
Route::screen('users', UserListScreen::class)->name('platform.systems.users');

// Roles...
Route::screen('roles/{roles}/edit', RoleEditScreen::class)->name('platform.systems.roles.edit');
Route::screen('roles/create', RoleEditScreen::class)->name('platform.systems.roles.create');
Route::screen('roles', RoleListScreen::class)->name('platform.systems.roles');

// Example...
Route::screen('example', ExampleScreen::class)->name('platform.example');
Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', 'Idea::class','platform.screens.idea');
