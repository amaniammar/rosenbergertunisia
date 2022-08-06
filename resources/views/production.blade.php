
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div class="body-wrap">
	 <nav class="nav-menu mobile-menu">
	          <li><a class="active" href="{{url('accueil')}}">Accueil</a></li>
              <li><a class="active" href="{{url('general')}}">General</a></li>
			  <li><a class="active" href="{{url('add')}}">Ajout</a></li>
     </nav>
     <div class="container">
    
    

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
	<script>
	function c(){
	console.log ='hello';
  const changeSelected = (e) => {
  const $select = document.querySelector('#description');
  $select.value = 'hello'
   
};
}
	</script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
<p>PRODUCTION STATMONITOR</p>


</head>

	<body>
	
	@section('content')
<div class="container">
    

    <form action="{{url('productions')}}" method="post">
            {{ csrf_field() }}
		<div class="row">
			<div class="col-6">
				<div class="row input-group">
				<label class="col-4" for="date">Date</label>
				<input class="col-8" type="date" name="date" class="form-control"/>
				</div>
		        <br>
			
				<div class="row input-group ig-b" >
				<label class="col-4">Famille</label>   
                <select class="col-8" name="article" id="article"  class="form-control">
								<option value="famille1A">famille1A</option>
                                <option value="famille1B">famille1B</option>
								<option value="famille1C">famille1C</option>
								<option value="famille1D">famille1D</option>
								<option value="famille1E">famille1E</option>
								<option value="famille1F">famille1F</option>
								<option value="famille1G">famille1G</option>
                                <option value="famille3A">famille3A</option>
								<option value="famille3B">famille3B</option>
								<option value="famille3C">famille3C</option>
								<option value="famille1D">famille3D</option>
								<option value="famille3E">famille3E</option>
								<option value="famille3F">famille3F</option>
								<option value="famille3G">famille3G</option>
								<option value="famille5A">famille5A</option>
								<option value="famille5B">famille5B</option>
								<option value="famille5C">famille5C</option>
								<option value="famille5D">famille5D</option>
								<option value="famille5E">famille5E</option>
								<option value="famille5F">famille5F</option>
								<option value="famille5G">famille5G</option>
								<option value="" disabled selected>Select Article</option>

							</select>

							

							</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Description</label>
				 <select class="col-8" name="description" id="description"  class="form-control">
								
								<option value="Descriptionfamille1A" disabled selected >Description famille1A</option>
								<option value="Descriptionfamille1B" disabled selected>Description famille1B</option>
								<option value="Descriptionfamille1C" disabled selected>Description famille1C</option>
								<option value="Descriptionfamille1D" disabled selected>Description famille1D</option>
								<option value="Descriptionfamille1E" disabled selected>Description famille1E</option>
								<option value="Descriptionfamille1F" disabled selected>Description famille1F</option>
								<option value="Descriptionfamille1G" disabled selected>Description famille1G</option>
                                <option value="Descriptionfamille3A" disabled selected >Description famille3A</option>
								<option value="Descriptionfamille3B" disabled selected>Description famille3B</option>
								<option value="Descriptionfamille3C" disabled selected>Description famille3C</option>
								<option value="Descriptionfamille3D" disabled selected>Description famille3D</option>
								<option value="Descriptionfamille3E" disabled selected>Description famille3E</option>
								<option value="Descriptionfamille3F" disabled selected>Description famille3F</option>
								<option value="Descriptionfamille3G" disabled selected>Description famille3G</option>
								<option value="Descriptionfamille5A" disabled selected>Description famille5A</option>
								<option value="Descriptionfamille5B" disabled selected>Description famille5B</option>
								<option value="Descriptionfamille5C" disabled selected>Description famille5C</option>
								<option value="Descriptionfamille5D" disabled selected>Description famille5D</option>
								<option value="Descriptionfamille5E" disabled selected>Description famille5E</option>
								<option value="Descriptionfamille5F" disabled selected>Description famille5F</option>
								<option value="Descriptionfamille5G" disabled selected>Description famille5G</option>
								<option value="Descriptionfamille5GA" disabled selected>Description famille5GA</option>
								<option value="Descriptionfamille5GB" disabled selected>Description famille5GB</option>
								
								
						
							<option value="" disabled selected>Select Description Article</option>


							</select>
							
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Ref_pa</label>
				<select class="col-8" name="ref_pa" id="refpa"  class="form-control">
								<option value="pA123">pA123</option>
								<option value="pA234">pA234</option>
								<option value="pA345">pA345</option>
								<option value="pA456">pA456</option>
								<option value="pA567">pA567</option>
								<option value="pA678">pA678</option>
								<option value="pA789">pA789</option>
                                <option value="pA890">pA890</option>
								<option value="pA901">pA901</option>
								<option value="pA012">pA012</option>
								<option value="pA023">pA023</option>
								<option value="pA034">pA034</option>
								<option value="pA045">pA045</option>
								<option value="pA056">pA056</option>
								<option value="pA078">pA078 </option>
								<option value="pA089">pA089</option>
								<option value="pA912">pA912</option>
								<option value="pA923">pA923</option>
								<option value="pA934">pA934</option>
								<option value="pA945">pA945</option>
								<option value="pA956">pA956</option>
								<option value="pA944">pA111</option>
								<option value="pA9566">pA222</option>
								<option value="" disabled selected>Select Ref_Pa</option>

							</select>

							
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Etape_de_travail</label>
				<input class="col-8" name="etape_de_travail" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Operateur</label>
				<input class="col-8" name="operateur" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Ope_prenom</label>
				<input class="col-8" name="ope_prenom" class="form-control"/>
				</div>

				
				<div class="row input-group ig-b" >
				<label class="col-4" for="">Ope_nom</label>
				<input class="col-8" name="ope_nom" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Heure_de_traval</label>
				<input class="col-8" name="heure_de_traval" class="element" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Machine</label>
				<select class="col-8" name="machine" id="machine"  class="form-control">
								<option value="G20">G20</option>
								<option value="G21">G21</option>
								<option value="G23">G23</option>
								<option value="G24">G24</option>
								<option value="G33">G33</option>
								<option value="G43">G43</option>
								<option value="G23">R23</option>
								<option value="KameraG4.1">Kamera G4.1</option>
								<option value="KameraG3.1">Kamera G3.1</option>
								<option value="KameraG2.1">Kamera G2.1</option>
								<option value="" disabled selected>Select Machine</option>
							</select>
							
				</div>

                <div class="row input-group ig-b" >
				<label class="col-4" for="">Panne(min)</label>
				<input class="col-8" name="panne" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Description_machine</label>
				<select class="col-8" name="description_machine" id="description_machine"  class="form-control">
								<option value="Presse_Kistler1" >Presse Kistler 1</option>
								<option value="Presse_Kistler2">Presse Kistler 2</option>
								<option value="Presse_Kistler3">Presse Kistler 3</option>
								<option value="Presse_Kistler4">Presse Kistler 4</option>
								<option value="Presse1">Presse 1</option>
								<option value="Presse2">Presse 2</option>
								<option value="Presse_Force_master">Presse Force master</option>
								<option value="KameraG4.1">Kamera G4.1</option>
								<option value="KameraG3.1">Kamera G3.1</option>
								<option value="KameraG2.1">Kamera G2.1</option>
								<option value="" disabled selected>Select Description Machine</option> 
							</select>

						
				</div>
				

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Retard_alimentation_logique</label>
				<input class="col-8" name="retard_alimentation_logique" class="form-control"/>
				</div>
         </div>
				
            <div class="col-6">

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Performance_sol</label>
				<input class="col-8" name="performance_sol" class="element" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Quantité_produit</label>
				<input class="col-8" name="quantité_produit" class="element" class="form-control"/>
				</div>
				

                <div class="row input-group ig-b" >
				<label class="col-4" for="faute1">Faute 1</label>
				<input type="radio" id="faute1"name="faute1" >
				<label for="faute1">Interne</label>
				<input type="radio" id="faute1"name="faute1">
				<label for="faute1">Fournisseur</label>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="non_conforme1">Non_conforme 1</label>
				<input class="col-8" name="non_conforme1" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Code de faute 1</label>
				<input class="col-8" name="code_de_faute1" class="form-control"/>
				</div>
				 
				<div class="row input-group ig-b" >
				<label class="col-4" for="faute2">Faute 2</label>
				<input type="radio" id="faute2" name="faute2" >
				<label for="faute2">Interne</label>
				<input type="radio" id="faute2" name="faute2" >
				<label for="faute2">Fournisseur</label>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Non_conforme 2</label>
				<input class="col-8" name="non_conforme2" class="form-control"/>
				</div>
				 
				<div class="row input-group ig-b" >
				<label class="col-4" for="">Code de faute 2</label>
				<input class="col-8" name="code_de_faute2" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="faute3">Faute 3</label>
				<input type="radio" id="faute3" name="faute3">
				<label for="faute3">Interne</label>
				<input type="radio" id="faute3"name="faute3">
				<label for="faute3">Fournisseur</label>
				</div> 

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Non_conforme 3</label>
				<input class="col-8" name="non_conforme3" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Code de faute 3</label>
				<input class="col-8" name="code_de_faute3" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Taux_rebut</label>
				<input class="col-8" name="taux_rebut" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Productivitée</label>
				<input class="col-8" name="productivité" class="productivité" class="form-control"/>
				</div>

				<div class="row input-group ig-b" >
				<label class="col-4" for="">Disponibilité_machine</label>
				<input class="col-8" name="disponibilité_machine" class="form-control"/>
				</div>
				
			</div>

            <div class="row col-3  " >
          
		           <input type="submit" class="form-control btn btn-primary" value="enregistrer">
		</div>
		   
		</div>
    </form>  
       


@section('content')
</div>
</body>
<script>

document.getElementById("description").onchange = function(){ 
	
for (let i = 0; i < document.getElementById('description').getElementsByTagName('option').length-1; i++) {
console.log (document.querySelector('#description').value);
if ( document.querySelector('#description').value==document.getElementById('description').getElementsByTagName('option')[i].value){
	document.querySelector('#refpa').value=document.getElementById('refpa').getElementsByTagName('option')[i].value;
	}
  
}
}; 

document.getElementById("machine").onchange = function(){ 


for (let i = 0; i < document.getElementById('machine').getElementsByTagName('option').length-1; i++) {
console.log (document.querySelector('#machine').value);
if ( document.querySelector('#machine').value==document.getElementById('machine').getElementsByTagName('option')[i].value){
	document.querySelector('#description_machine').value=document.getElementById('description_machine').getElementsByTagName('option')[i].value;
	}
  
}
}; 




document.getElementById("article").onchange = function(){ 

for (let i = 0; i < document.getElementById('description').getElementsByTagName('option').length-1; i++) {


 let famille=document.querySelector('#article').value.toLowerCase();
 let desc=document.getElementById('description').getElementsByTagName('option')[i].value.toLowerCase();
 

 if(desc.includes(famille)){
document.getElementById('description').getElementsByTagName('option')[i].disabled=false;
document.getElementById('description').getElementsByTagName('option')[i].selected=true;
 }
 else {
	 document.getElementById('description').getElementsByTagName('option')[i].disabled=true;
	 document.getElementById('description').getElementsByTagName('option')[i].selected=false;
 }
}
	
for (let i = 0; i < document.getElementById('description').getElementsByTagName('option').length-1; i++) {
console.log (document.querySelector('#description').value);
if ( document.querySelector('#description').value==document.getElementById('description').getElementsByTagName('option')[i].value){
	document.querySelector('#refpa').value=document.getElementById('refpa').getElementsByTagName('option')[i].value;
	}
  
}
};



</script>

</html>


















