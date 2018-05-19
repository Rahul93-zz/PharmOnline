@extends('layouts.master')
<div>
    <span class="user_toggle" data-type="login">Login</span>
    <span class="user_toggle" data-type="signup">Signup</span>
    <div class="user_container" data-container="login" id="login_container">
        <label for="username">Username</label>
        <input type="text" id="username">
        <label for="password">Password</label>
        <input type="password" id="password">
        <span id="login_submit">Login</span>
    </div>
    <div class="user_container hidden" data-container="signup" id="signup_container">
        <label for="signup_name">Name</label>
        <input type="text" id="signup_name">
        <label for="signup_email">Email</label>
        <input type="text" id="signup_email">
        <label for="signup_mobile">Mobile</label>
        <input type="number" id="signup_mobile">
        <label for="signup_password">Password</label>
        <input type="password" id="signup_password">
        <span id="signup_submit">Signup</span>
    </div>
</div>
