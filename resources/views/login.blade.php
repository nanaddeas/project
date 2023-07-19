@extends('layouts.main')

@section('container2')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Nutrisheesh | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/csssign-in">
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form>
            <h1 class="h3 mb-3 fw-normal text-center">Sign-In First</h1>
    
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Drop your E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating dropdown">
                <select class="form-select" id="floatingRole">
                    <option selected disabled>Select your role</option>
                    <option value="Admin">Admin</option>
                    <option value="Client">Client</option>
                    <option value="Nutritionist">Nutritionist</option>
                </select>
                <label for="floatingRole">Your Role</label>
            </div>
            <button class="button btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
        <small> Not registered yet? <a href="/register">Please, Register Now!</a></small>
    @endsection