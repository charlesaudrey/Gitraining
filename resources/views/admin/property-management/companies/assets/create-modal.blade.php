<div id="create-company" class="modal modal-fixed-footer ">
  <form action="{{ route('companies.store') }}" method="POST">
    <div class="modal-content">
      <div class="col s12 m12 l12">
        <div id="Form-advance" class=" scrollspy">
          <div class="card-content">
            <h5 class="card-title">Add New Company</h5>
            
            @csrf
            <div class="row">
              <div class="input-field col m6 s12">
                <input name="name" type="text">
                <label for="first_name01">Company Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input name="address" type="text">
                <label for="last_name">Company Address</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <input name="postal_code" type="number">
                <label for="email">Postal Code</label>
              </div>
              <div class="input-field col m6 s12">
                <input name="phone" type="number">
                <label for="number">Phone Number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <input name="tin" type="number">
                <label for="number">Tin Number</label>
              </div>
              <div class="input-field col m6 s12">
                <select name="status">
                  <option value="" disabled selected>Choose Status</option>
                  <option value="{{ true }}">Active</option>
                  <option value="{{ false }}">Inactive</option>
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
</div>