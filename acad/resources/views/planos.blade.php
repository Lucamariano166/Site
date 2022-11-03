@extends('_layout.app')


@section('conteudo')
@include('_layout.navbar')

<div class="bg-slide">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4 text-white">Planos</h1>
      <p class="lead text-white">Planos SUDÃOCROSSFIT.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div class="card mb-4 shadow-sm">
          <div class="card-header bg-dark">
            <h4 class="my-0 font-weight-normal text-white">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$115 <small class="text-muted">/ mês</small></h1>
            <ul class="list-unstyled mt-3 mb-3">
              <li>1 usuário</li>
              <li></li>
              <li>Suporte por email prioritário</li>
              <li>Acesso ao centro de ajuda</li>
            </ul>
            <button type="button" class="btn btn-dark"><a href="https://wa.me/5561983228838?text=Quero%20conhecer">Conhecer</a></button>
            
          </div>
        </div>
        
        <div class="card mb-4 shadow-sm">
          <div class="card-header bg-dark">
            <h4 class="my-0 font-weight-normal text-white">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$129 <small class="text-muted">/ mês</small></h1>
            <ul class="list-unstyled mt-3 mb-3">
              <li></li>
              <li></li>
              <li>Suporte por email e telefone</li>
              <li>Acesso ao centro de ajuda</li>
            </ul>
            <button type="button" class="btn btn-dark"><a href="https://wa.me/5561983228838?text=Quero%20conhecer">Conhecer</a></button>
          </div>
        </div>
      </div>
      </div>
@include('_layout.footer')
@endsection