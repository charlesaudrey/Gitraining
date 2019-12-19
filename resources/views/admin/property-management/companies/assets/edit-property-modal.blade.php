{{-- <div id="edit-property-{{ $property->id }}" class="modal modal-fixed-footer ">
    <form action="{{ route('properties.update', $property->id) }}" method="POST">
      <div class="modal-content">
        <div class="col s12 m12 l12">
          <div id="Form-advance" class=" scrollspy">
            <div class="card-content">
              <h5 class="card-title">Edit {{ strtoupper($property->name) }}</h5>
              
              @csrf
              @method('PATCH')
  
              <div class="row">
                <div class="input-field col m6 s12">
                  <input name="name" type="text" value="{{ $property->name }}">
                  <label for="first_name01">Property Name</label>
                </div>
  
                @if (Auth::user()->client->platform->name == 'organization')
                  <div class="input-field col m6 s12">
                    <select name="company_id">
                      <option value="" disabled selected>Choose Company</option>
                      @foreach ($companies as $company)
                        <option value="{{ $company->id }}" {{ $property->company->id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                      @endforeach
                    </select>
                    <label for="last_name">Company</label>
                  </div>
                @else
                  <input type="hidden" name="company_id" value="{{ $companies[0]->id }}">
                @endif
  
                <div class="input-field col m6 s12">
                  <select name="company_id">
                    <option value="" disabled selected>Choose Company</option>
                    @foreach ($companies as $company)
                      <option value="{{ $company->id }}" {{ $property->company->id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                    @endforeach
                  </select>
                  <label for="last_name">Details</label>
                </div>
              </div>
  
              <div class="row">
                <div class="input-field col m6 s12">
                  <input name="details" type="text" value="{{ $property->details }}">
                  <label for="email">Details</label>
                </div>
  
                <div class="input-field col m6 s12">
                  <input name="number" type="number" value="{{ $property->number }}">
                  <label for="number">Phone Number</label>
                </div>
              </div>
  
              <div class="row">
                <div class="input-field col m6 s12">
                  <select name="status">
                    <option value="" disabled selected>Choose Status</option>
                    <option value="{{ true }}" {{ $property->status ? 'selected' : '' }}>Active</option>
                    <option value="{{ false }}" {{ !$property->status ? 'selected' : '' }}>Inactive</option>
                  </select>
                  <label for="status">Status</label>
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
  </div> --}}