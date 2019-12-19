<div id="create-property" class="modal modal-fixed-footer ">
  <form action="{{ route('properties.store') }}" method="POST">
    <div class="modal-content">
      <div class="col s12 m12 l12">
        <div id="Form-advance" class=" scrollspy">
          <div class="card-content">
            <h5 class="card-title">Add New Property</h5>
            
            @csrf

            <div class="row">
              <div class="input-field col s12">
                <input name="name" type="text">
                <label for="first_name01">Property Name</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col m6 s12">
                <input name="details" type="text">
                <label for="email">Details</label>
              </div>

              <div class="input-field col m6 s12">
                <input name="number" type="number">
                <label for="number">Phone Number</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col m6 s12">
                <select name="status">
                  <option value="" disabled selected>Choose Status</option>
                  <option value="{{ true }}">Active</option>
                  <option value="{{ false }}">Inactive</option>
                </select>
                <label for="status">Status</label>
              </div>

              @if (Auth::user()->client->platform->name == 'organization')
                <div class="input-field col m6 s12">
                  <select name="company_id">
                    <option value="" disabled selected>Choose Company</option>
                    @foreach ($companies as $company)
                      <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                  </select>
                  <label for="last_name">Company</label>
                </div>
              @else
                <input type="hidden" name="company_id" value="{{ $companies[0]->id }}">
              @endif
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