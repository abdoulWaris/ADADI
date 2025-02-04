@extends('layout.app')
@section('contenu')
<div class="container-fluid">
                <!-- Row -->
                <form class="form-horizontal mt-3 form-material" id="loginform" action="{{route('paiement')}}" method="POST">
                @csrf                
                <div class="form-group mt-2 mb-3">
                                    <div class="col-xs-6">
                                        <input class="form-control" type="number" name="amount" value="amount" required="" placeholder="Montant"> </div>
                                </div>
								<div class="form-group text-center mt-4 mb-3">
                                    <div class="col-xs-4">
                                        <button class="btn btn-info d-block w-100 waves-effect waves-light" type="submit">Valider</button>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-4">
                                    
								<div class="col-sm-12 justify-content-center d-flex">
								<p>Je retourne sur le site <a href="{{ route('home') }}" class="text-info font-weight-medium ms-1">Accueil</a></p>
								</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection