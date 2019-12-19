<div id="create-room" class="modal modal-fixed-footer ">
  <form action="{{ route('rooms.store') }}" method="POST">
    <div class="modal-content">
      <div class="col s12 m12 l12">
        <div id="Form-advance" class=" scrollspy">
          <div class="card-content">
            <h5 class="card-title">Add New Company</h5>
            
            @csrf

            <div class="row">
              <div class="input-field col m6 s12">
                <input name="name" type="text">
                <label for="first_name01">Room Name</label>
              </div>

              <div class="input-field col m6 s12">
                <input name="room_number" type="number">
                <label for="last_name">Room Number</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col m6 s12">
                <input name="details" type="text">
                <label for="email">Details</label>
              </div>

              <div class="input-field col m6 s12">
                <input name="guest" type="number">
                <label for="number">Max Guest</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col m6 s12">
                <input name="rate" type="number">
                <label for="email">Rate</label>
              </div>

              <div class="input-field col m6 s12">
                <select name="status">
                  <option value="" disabled selected>--Choose Status--</option>
                  <option value="{{ true }}">Active</option>
                  <option value="{{ false }}">Inactive</option>
                </select>
                <label for="status">Status</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col m6 s12">
                <select name="property_id">
                  <option value="" disabled selected>--Select Property--</option>
                  @foreach ($properties as $property)
                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                  @endforeach
                </select>
                <label for="status">Property</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer ">
      <a class=" modal-close waves-effect waves-light mb-2 btn white-text"><i
        class="material-icons left">clear</i>Cancel</a>
      <button type="submit" class="waves-effect waves-light mb-2 btn white-text"><i
        class="material-icons right">send</i>Save</button>
    </div>
  </form>
</div>