<div class="col-lg-6 col-md-7">
    <div class="center-section">
        <div class="main-search-bar">
            <h2>Events happening in your city</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $message)
                    <li style="color: #fff;">{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('tickets.store') }}" method="POST" id="book-ticket">
                @csrf
                <div class="main-search-inputs">
                    <div class="row no-gutters">

                        <div class="col-lg-9 col-md-12 col-sm-12 border-lr">
                            <select name="service_id" class="wide" style="display: none;">
                                <option>Select Service</option>
                                @foreach($services as $service)
                                <option value={{ $service->id }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <button class="search-btn" type="submit"><i
                                    class="fas fa-location-arrow"></i><span>Book</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="error" style="color: #fff;"></div>
        </div>

        <x-services-section />

    </div>
</div>