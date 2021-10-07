<form class="row g-3">
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="{{$user->email}}">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Voornaam</label>
        <input type="text" class="form-control" id="inputCity" placeholder="{{$user->first_name}}">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Achternaam</label>
        <input type="text" class="form-control" id="inputCity" placeholder="{{$user->last_name}}">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Telefoonnummer</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>  
    <div class="col-12">
      <label for="inputAddress" class="form-label">Adres</label>
      <input type="text" class="form-control" id="inputAddress">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Stad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Postcode</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">Kortingscode</label>
        <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Ik ga akkoord met de voorwaarden
        </label>
      </div>
    </div>
    <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Ik wil graag gepersonaliseerde aanbiedingen, nieuws, en plaatjes van Drenthe ontvangen in mijn mailbox
          </label>
        </div>
    </div>  
    <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Ik wil kinderpostzegels
          </label>
        </div>
    </div>  
  </form>