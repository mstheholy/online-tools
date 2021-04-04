@extends("home")
@section("content")

<div class="card">
  <div class="card-header">
    <div class="card-title">
      <i class="fa fa-fw fa-virus"></i>
      Data Kasus COVID-19 di Indonesia
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-md table-borderless">
        <thead>
          <tr>
            <th>No</th>
            <th>Provinsi</th>
            <th>Sembuh</th>
            <th>Positif</th>
            <th>Meninggal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Jakarta</td>
            <td>72</td>
            <td>9292</td>
            <td>72722</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Jombang</td>
            <td>722</td>
            <td>992</td>
            <td>72722</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Jember</td>
            <td>771</td>
            <td>9292</td>
            <td>727822</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection