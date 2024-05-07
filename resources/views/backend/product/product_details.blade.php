@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
   <!--breadcrumb-->
   <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">Details Product</div>
      <div class="ps-3">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
               <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Details Product</li>
            </ol>
         </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
           <a href="{{ route('all.product') }}" class="btn btn-outline-primary">back</a> 				 
        </div>
     </div>
   </div>
   <!--end breadcrumb-->
   <div class="card">
      <div class="card-body p-4">
         <h5 class="card-title">Details Product</h5>
         <hr/>
            <div class="form-body mt-4">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="border border-3 p-4 rounded">
                        <div class="form-group mb-3">
                           <label for="inputProductTitle" class="form-label">Product Name</label>
                           <input type="text" name="product_name" class="form-control" id="inputProductTitle" value="{{ $products->product_name }}" readonly>
                        </div>
                        <div class="mb-3">
                           <label for="inputProductTitle" class="form-label">Product Tags</label>
                           <h6>{{ $products->product_tags }}</h6>
                        </div>
                        <div class="mb-3">
                           <label for="inputProductTitle" class="form-label">Product Size</label>
                           <h6>{{ $products->product_size }}</h6>
                        </div>
                        <div class="mb-3">
                           <label for="inputProductTitle" class="form-label">Product Color</label>
                           <h6>{{ $products->product_color }}</h6>
                        </div>
                        <div class="form-group mb-3">
                           <label for="inputProductDescription" class="form-label">Short Description</label>
                           <h6>{{ $products->short_descp }}</h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="border border-3 p-4 rounded">
                        <div class="row g-3">
                           <div class="form-group col-md-6">
                              <label for="inputPrice" class="form-label">Product Price</label>
                              <input type="text" name="selling_price" class="form-control" id="inputPrice" value="{{ $products->selling_price }}" readonly>
                           </div>
                           <div class="col-md-6">
                              <label for="inputCompareatprice" class="form-label">Discount Price </label>
                              <input type="text" name="discount_price" class="form-control" id="inputCompareatprice" value="{{ $products->discount_price }}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="inputCostPerPrice" class="form-label">Product Code <i id="generate" class="fas fa-sync-alt bg-info p-1"></i></label>
                              <input type="text" name="product_code" class="form-control" id="inputCostPerPrice" value="{{ $products->product_code }}" readonly>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="inputStarPoints" class="form-label">Product Quantity</label>
                              <input type="text" name="product_qty" class="form-control" id="inputStarPoints" value="{{ $products->product_qty }}" readonly>
                           </div>
                           <div class="form-group col-12">
                              <label for="inputProductType" class="form-label">Product Brand</label>
                                <h6>{{ $products['brand']['brand_name'] ?? ''}}</h6>

                           </div>
                           <div class="form-group col-12">
                              <label for="inputVendor" class="form-label">Product Category</label>
                              <h6>{{ $products['category']['category_name'] ?? ''}}</h6>

                           </div>
                           <div class="form-group col-12">
                              <label for="inputCollection" class="form-label">Product SubCategory</label>
                              <h6>{{ $products['subcategory']['subcategory_name'] ?? ''}}</h6>
                           </div>
                           <div class="col-12">
                              <label for="inputCollection" class="form-label">Select Vendor</label>
                              <h6>{{ $products['vendor']['name'] ?? ''}}</h6>
                           </div>
                           <div class="col-12">
                              <div class="row g-3">
                                 <div class="col-md-6">
                                    <div class="form-check">
                                        <label for="">Hot Deals</label>
                                        <span class="badge bg-success">{{ $products->hot_deals == 1 ? 'hot_deals' : '' }}</span>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-check">
                                        <label for="">Featured</label>
                                        <span class="badge bg-success">{{ $products->featured == 1 ? 'featured' : '' }}</span>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-check">
                                        <label for="">Special Offer</label>
                                        <span class="badge bg-success">{{ $products->special_offer == 1 ? 'special_offer' : '' }}</span>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-check">
                                        <label for="">Special Offer</label>
                                        <span class="badge bg-success">{{ $products->special_deals == 1 ? 'special_deals' : '' }}</span>
                                    </div>
                                 </div>
                              </div>
                              <!-- // end row  -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end row-->
            </div>
      </div>
   </div>
</div>
<!-- /// Main Image Thambnail Update ////// -->
<div class="page-content">
   <h6 class="mb-0 text-uppercase">Main Image Thambnail </h6>
   <hr>
   <div class="card">		
         <div class="card-body">
            <div class="mb-3">
               <label for="formFile" class="form-label"> </label>
               <img src="{{ asset($products->product_thambnail) }}" style="width:100px; height:100px">
            </div>
         </div>
   </div>
</div>
<!-- /// End Main Image Thambnail Update ////// -->
<!-- /// Update Multi Image  ////// -->
<div class="page-content">
   <h6 class="mb-0 text-uppercase">Multi Image </h6>
   <hr>
   <div class="card">
      <div class="card-body">
         <table class="table mb-0">
            <thead>
               <tr>
                  <th scope="col">Sl</th>
                  <th scope="col">Image</th>
               </tr>
            </thead>
            <tbody>
                  @foreach($multiImgs as $key => $img)
                  <tr>
                     <th scope="row">{{ $key+1 }}</th>
                     <td> <img src="{{ asset($img->photo_name) }}" style="width:100px;"> </td>
                  </tr>
                  @endforeach		 
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- /// End Update Multi Image  ////// -->
@endsection
