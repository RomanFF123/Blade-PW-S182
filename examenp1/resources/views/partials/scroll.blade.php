
<div class="row">
    <div class="col-4">
      <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="{{ route('welcome') }}">Inicio</a>
        <a class="list-group-item list-group-item-action" href="{{ route('vista1') }}">Vista 1</a>
        <a class="list-group-item list-group-item-action" href="{{ route('vista2') }}">Vista 2</a>
        <a class="list-group-item list-group-item-action" href="{{ route('vista3') }}">Vista 3</a>
      </div>
    </div>
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id={{ route('vista1') }}>Item 1</h4>
        <p>...</p>
        <h4 id={{ route('vista2') }}>Item 2</h4>
        <p>...</p>
        <h4 id="list-item-3">Item 3</h4>
        <p>...</p>
        <h4 id="list-item-4">Item 4</h4>
        <p>...</p>
      </div>
    </div>
  </div>