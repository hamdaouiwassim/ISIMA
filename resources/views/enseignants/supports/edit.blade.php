@extends('layouts.enseignant')

@section('content')
  
      

        
            
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('avieform')}}" class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>Ajouter support pedagogique</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

           <section>
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i>Les supports pedagogiques</h3>
                    <hr >
                
                <div class="table-responsive">
                    <div class="col-10 offset-1">
                        <div class="card">
                            <div class="card-header">Modifier support pedagogique</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Coordonnes</h3>
                                </div>
                                <hr>
                            <form action="{{ route('supportmodifydb',['id'=> $support->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                  
                                    <div class="form-group">
                                        <label for="email" class="control-label mb-1">Nom</label>
                                        <input  name="nom" type="text" class="form-control cc-name valid" value="{{ $support->nom }}"">
                                       
                                    </div>
                                    
                                    <div class="form-group has-success">
                                        <label for="email" class="control-label mb-1">Document</label>
                                        <input id="number" name="document" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                       
                                    </div>

                                    <div class="form-group">
                                        <label for="prenom" class="control-label mb-1">Matiere</label>
                                        <select  name="idmatiere"  class="form-control"  >
                                            @foreach ($matieres as $matiere)
                                                @if ( $support->matiere->id == $matiere->id  )
                                                    <option selected value="{{ $matiere->id }}">{{ $matiere->nom }}</option>
                                                @else
                                                    <option value="{{ $matiere->id }}">{{ $matiere->nom }}</option>
                                                @endif
                                                    
                                            @endforeach
                                            
                                    </select>
                                    </div>  

                                

                                  
                                    
                                    
                                   
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-user-plus fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Modifier</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           </section>
     

           

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          

    </div>
@endsection

