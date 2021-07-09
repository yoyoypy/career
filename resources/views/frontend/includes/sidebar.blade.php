<!-- Left content -->
<div class="col-xl-3 col-lg-3 col-md-4">
    <div class="row">
        <div class="col-12">
                <div class="small-section-tittle2 mb-45">
                <div class="ion"> <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="20px" height="12px">
                <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                    d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                </svg>
                </div>
                <h4>Filter Jobs</h4>
            </div>
        </div>
    </div>
    <!-- Job Category Listing start -->
    <div class="job-category-listing mb-50" style="background-color: rgba(31,43,123,0.8)">
        <!-- single one -->
        <div class="single-listing mb-50">
           <div class="small-section-tittle2">
                 <h4 style="color: white">Job Category</h4>
           </div>
            <!-- Select job items start -->
            <div class="select-job-items2">
                <select name="select" onchange="window.location.href=this.value">
                    <option value="">All Category</option>
                    @foreach ($categories as $category)
                    <option value="../job-category/{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            <br><br><br>
            <div class="small-section-tittle2">
                <h4 style="color: white">Job Location</h4>
            </div>
            <!-- Select job items start -->
            <div class="select-job-items2">
                <select name="select" onchange="window.location.href=this.value">
                    <option value="">Anywhere</option>
                    @foreach ($locations as $location)
                    <option value="../job-location/{{ $location->id }}">{{ $location->location }}</option>
                    @endforeach
                </select>
            </div>
            <!--  Select job items End-->
        <!-- single two -->
        </div>
    </div>
    <!-- Job Category Listing End -->
</div>
