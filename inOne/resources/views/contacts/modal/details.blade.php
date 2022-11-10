
  <!-- Modal -->
  <div class="modal fade" id="detailsModal{{$contact->id}}" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content modal-xl">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="detailsModalLabel">Contactos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <table id="detailsModal" class="table table-dark table-striped mt-4">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Género</th>
                        <th>Fecha de nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->first_last_name}}</td>
                        <td>{{$contact->second_last_name}}</td>
                        <td>{{$contact->phone_number}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->gender}}</td>
                        <td>{{$contact->birth_date}}</td>
                        <td>
                            <form method="POST" action="{{route('contacts.destroy', $contact->id)}}">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$contact->id}}">Editar</button>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
