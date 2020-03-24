<?php

use App\Entity\User;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Login
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

// Home > Register
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Register', route('register'));
});

// Home > Cabinet
Breadcrumbs::for('cabinet', function ($trail) {
    $trail->parent('home');
    $trail->push('Cabinet', route('cabinet'));
});

// Home > Login > Reset Password
Breadcrumbs::for('password.request', function ($trail) {
    $trail->parent('login');
    $trail->push('Reset Password', route('password.request'));
});

// Home > Login > Verify
Breadcrumbs::for('verification.notice', function ($trail) {
    $trail->parent('login');
    $trail->push('Verify email', route('verification.notice'));
});

// Home > Login > Reset Password > Change
Breadcrumbs::for('password.reset', function ($trail) {
    $trail->parent('password.request');
    $trail->push('Change', route('password.reset'));
});

#############################################
# Admin

// Home > Admin
Breadcrumbs::for('admin.home', function ($trail) {
    $trail->parent('home');
    $trail->push('Admin', route('admin.home'));
});

// Home > Admin > Users
Breadcrumbs::for('admin.users.index', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('Users', route('admin.users.index'));
});

// Home > Admin > Create User
Breadcrumbs::for('admin.users.create', function ($trail) {
    $trail->parent('admin.users.index');
    $trail->push('Create', route('admin.users.create'));
});

// Home > Admin > Show User
Breadcrumbs::for('admin.users.show', function ($trail, User $user) {
    $trail->parent('admin.users.index');
    $trail->push($user->name, route('admin.users.show', $user));
});

// Home > Admin > Edit User
Breadcrumbs::for('admin.users.edit', function ($trail, User $user) {
    $trail->parent('admin.users.show', $user);
    $trail->push('Edit', route('admin.users.edit', $user));
});


##########################################
# Not Use

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});
