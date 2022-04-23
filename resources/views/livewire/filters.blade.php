<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <style>
        .w-5 {
            height: 10px;
        }
        body {
            padding-bottom: 40px;
        }
      </style>
      <div class="container" style="margin-top: 100px; margin-bottom:70px; margin-top: 30px;">
      {{-- 
      | email                     | varchar(255)    | NO   | UNI | NULL    |                |
      | pais                      | varchar(255)    | YES  |     | NULL    |                |
      | estado                    | varchar(255)    | YES  |     | NULL    |                |
      | genero                    | varchar(255)    | YES  |     | NULL    |                |
          
          --}}
          <h1 style="text-align: center; padding:70px 0;"><b>Users</b></h1>
        <div class="container-fluid" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col-6">
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02"  wire:model.defer="type">
                    <option selected >--Selecciona--</option>
                    <option value="mail">mail</option>
                    <option value="pais">pais</option>
                    <option value="estado">estado</option>
                    <option value="gender">genero</option>
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Filtros</label>
            </div>
        </div>
        <div class="col-6">

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" wire:model.defer="content" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2" wire:click="filtr"">Button</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cold-12">
            <button class="btn btn-danger" style="width: 100%;" wire:click="rst">Reset</button>
        </div>
    </div>
</div>
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                      </th>
                      <th scope="col">Cliente </th>
                      <th scope="col">Genero</th>
                      <th scope="col">Pais</th>
                      <th scope="col">Estado</th>
                  </tr>
              </thead>
              <tbody>
                 @if (count($users)==0)
                      {{-- inicio de usuarios --}}
                  @foreach ($usrs as $item)
                  <tr>
                      <th scope="row">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          </div>
                      </th>
                      <td>{{$item->email}}</td>
                      <td>{{$item->pais}}</td>
                      <td>{{$item->estado}}</td>
                      <td>{{$item->genero}}</td>
                  </tr>
                  @endforeach
                  {{-- final de usuarios --}}

                 @else
                 @foreach ($users as $items)
                 <tr>
                     <th scope="row">
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                         </div>
                     </th>
                     <td>{{$items->email}}</td>
                     <td>{{$items->pais}}</td>
                     <td>{{$items->estado}}</td>
                     <td>{{$items->genero}}</td>
                 </tr>
                 @endforeach
                 @endif
              </tbody>
          </table>
      </div>
      @if (count($users)==0)
      <center style="margin-bottom:20px; ">
      
          {{ $usrs->links() }}
      </center>
      @endif
          
      
</div>
