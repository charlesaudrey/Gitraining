<div id="edit-company-{{ $company->id }}" class="modal modal-fixed-footer ">
  <form action="{{ route('companies.update', $company->id) }}" method="POST">
    <div class="modal-content">
      <div class="col s12 m12 l12">
        <div id="Form-advance" class=" scrollspy">
          <div class="card-content">
            <h5 class="card-title">Edit {{ strtoupper($company->name) }}</h5>
            
            @csrf
            @method('PATCH')
            
            <div class="row">
              <div class="input-field col m6 s12">
                <input name="name" type="text" value="{{ $company->name }}">
                <label for="first_name01">Company Name</label>
              </div>

              <div class="input-field col m6 s12">
                <input name="address" type="text" value="{{ $company->address }}">
                <label for="last_name">Company Address</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col m6 s12">
                <input name="postal_code" type="number" value="{{ $company->postal_code }}">
                <label for="email">Postal Code</label>
              </div>

              <div class="input-field col m6 s12">
                <input name="phone" type="number" value="{{ $company->phone }}">
                <label for="number">Phone Number</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col m6 s12">
                <input name="tin" type="number" value="{{ $company->tin }}">
                <label for="number">Tin Number</label>
              </div>

              <div class="input-field col m6 s12">
                <select name="status">
                  <option value="" disabled selected>Choose Status</option>
                  <option value="{{ true }}" {{ $company->status ? 'selected' : '' }}>Active</option>
                  <option value="{{ false }}" {{ !$company->status ? 'selected' : '' }}>Inactive</option>
                </select>
                <label for="status">Status</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-footer ">
      <a class=" modal-close waves-effect waves-light mb-2 btn white-text">
        <i class="material-icons left">clear</i>Cancel
      </a>
      
      <button type="submit" class="waves-effect waves-light mb-2 btn white-text">
        <i class="material-icons right">send</i>Save
      </button>
    </div>
  </form>
</div>