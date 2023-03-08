 @extends('layouts.admin_dashboard_layouts')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Data table </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data table</li>
        </ol>
      </nav>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data table</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Categories</th>
                    <th>Seller Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Accessories</td>
                    <td></td>
                    <td>
                      <label class="badge badge-info"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Babies and kiddies</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                     <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Beauty<td>
                    <td>
                     <label class="badge badge-danger"></label>
                    </td>
                    <td>
                    <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Computer & Office</td>
                    <td></td>
                    <td>
                      <label class="badge badge-success"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Electronics</td>
                    <td></td>
                    <td>
                      <label class="badge badge-success"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Fashion</td>
                    <td></td>
                    <td>
                      <label class="badge badge-info"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Food Items</td>
                    <td></td>
                    <td>
                      <label class="badge badge-success"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Furnitures</td>
                    <td></td>
                    <td>
                      <label class="badge badge-info"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Gadgets</td>
                    <td></td>
                    <td>
                      <label class="badge badge-success"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Groceries</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Jewelries</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Phones & Telecommunications</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Securities & Protections</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Sports & Entertainment</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Travelling Bags & Luggages</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Toys & Games</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Tools & Industrials</td>
                    <td></td>
                    <td>
                      <label class="badge badge-danger"></label>
                    </td>
                    <td>
                      <button class="btn btn-outline-primary">View</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
