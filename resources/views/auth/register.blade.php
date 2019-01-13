@extends('layouts.app')
@section('content')
    <section class="bg-img full container-root">
        <div class="container-form">
            <div class="flex-left active">
                <div id="left" class="form-flex hide">
                    <div class="flex-center">
                        <h3 class="text-white">
                            <small>Ainda não tem uma conta?</small>
                        </h3>
                    </div>
                    <div class="flex-center">
                        <button class="btn btn-outline-light" id="noleftbtn">
                            <b>CRIAR CONTA</b>
                        </button>
                    </div>
                </div>
                <h3 class="pb-3">Sign up</h3>
                <form class="form-flex" action="/user_register" method="post">
                    @csrf
                    <div class="form-group">
                        <input name="name" id="name" type="username" required/>
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-group">
                        <input name="email" id="myemail" type="email" required/>
                        <label for="myemail">E-mail</label>
                    </div>
                    <div class="form-group row">
                        <div class="col-6 col-md-6">
                            <label for="male">
                                <input id="male" value="male" name="gender" type="radio"/> Homem
                            </label>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="female">
                                <input id="female" value="female" name="gender" type="radio"/> Mulher
                            </label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input name="senha" id="mysenha" type="password" required/>
                        <label for="mysenha">Senha</label>
                    </div>
                    <div class="form-group">
                        <input name="confirm" id="confirm" type="password" required/>
                        <label for="confirm">Confirmar a senha</label>
                    </div>
                    <div>
                        <label for="check">
                            <input type="checkbox" name="check" id="check" class="form-check-inline" required/>
                            Concordo com os <a href="#">termos de uso</a>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="flex-center">
                            <button class="btn btn-outline-dark">
                                <b>SIGN UP</b>
                            </button>
                        </div>
                    </div>
                    <div class="small-screen">
                        <span>Já te uma conta? Faça login <a href="/login"> aqui </a></span>
                    </div>
                </form>
            </div>
            <div class="flex-right">
                <div id="right" class="form-flex">
                    <div class="flex-center">
                        <h3 class="text-white">
                            <small>Já tem uma conta?</small>
                        </h3>
                    </div>
                    <div class="flex-center">
                        <button class="btn btn-outline-light" id="norightbtn">
                            <b>ENTRAR</b>
                        </button>
                    </div>
                </div>
                <h3 class="hide">Login</h3>
                <form action="/login" class="hide" method="post">
                @csrf
                    <div class="form-group">
                        <input name="email" id="email" type="email"/>
                        <label for="email">E-mail</label>
                    </div>
                    <div class="form-group">
                        <input name="password" id="password" type="password"/>
                        <label for="password">Senha</label>
                    </div>
                    <div class="form-group">
                        <div class="flex-center">
                            <button class="btn btn-outline-dark">
                                <b>ENTRAR</b>
                            </button>
                        </div>
                    </div>
                    <div class="small-screen">
                        <span>Ainda não tem uma conta aqui? <a href="/register">Cadastre-se</a></span>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        document.title = 'My ADV | Login';
    </script>
@endsection