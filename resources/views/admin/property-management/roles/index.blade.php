<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @forelse ($roles as $role)
    {{ $role->name }} | {{ $role->navigation->name }}
  @empty
    No roles yet
  @endforelse

  <form action="{{ route('roles.store') }}" method="POST">
    @csrf

    <label>Role Name</label>
    <input type="text" name="name" placeholder="Role Name...">

    <select name="navigation_id">
      @foreach ($navigations as $navigation)
        <option value="{{ $navigation->_id }}">{{ $navigation->name }}</option>
      @endforeach
    </select>

    <input type="submit" value="Add Role">
  </form>
</body>
</html>