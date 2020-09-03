@extends('layouts.app')

@section('titulo', 'Vaga de ' . $job->vaga)

@section('conteudo')
        <div class="container header--light">
            <div class="header__title">
                <div class="job-detail__company-image"
                    style="background-image: url('https://loremflickr.com/150/150?random=1');"></div>
                <h1 class="header__title-h1-single">{{ $job->vaga }}</h1>
                <p class="header__title-company">Empresa {{ $job->empresa }}</p>
            </div>
        </div>
        
        <main>
            <div class="container job-detail">
        
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="content__block">
                            <div class="content-card">
                                {!! $job->descricao !!}
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-12 col-lg-4">
                        <div class="content-card">
                            <ul class="job-detail__details">
                                <li>
                                    <strong>Empresa</strong><br>
                                    <span>{{ $job->empresa }}</span><br>
                                    <a href="https://www.xyz.com/">Website</a>
                                </li>
                                <li>
                                    <strong>Tipo</strong><br>
                                    <span>{{ $job->tipo }}</span>
                                </li>
                                <li>
                                    <strong>Salário</strong><br>
                                    <span>{{ $job->salario }}</span>
                                </li>
                                <li>
                                    <strong>Publicado</strong><br>
                                    <span>{{ \Carbon\Carbon::parse($job->publicado)->diffForHumans() }}</span>
                                </li>
                                <li>
                                    <div class="job__tags">
                                        <div class="tags">
                                            @for ($i = 0; $i < sizeof($job->tags); $i++)
                                                <a href="#" class="tags__tag">{{ $job->tags[$i]->value }}</a>
                                            @endfor
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
        
                        <div class="mb-2">
                            <a target="_blank" href="#" class="btn btn-danger btn-block button__apply">
                                QUERO APLICAR AGORA
                            </a>
                        </div>
        
                    </div>
                </div>
            </div>
        
        </main>
@endsection