<footer class="footer dark">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <h2>Contact Us</h2>
                <p>
                    <b>Address:</b><br>
                    {{ $address["companyName"] }}<br>
                    {{ $address["street1"] }}<br>
                    {{ $address["street2"] }}<br>
                    {{ $address["city"] }}, {{ $address["state"] }} {{ $address["postalcode"] }}, {{ $address["country"] }}<br>
                    <b>Telephone:</b><br>
                    {{ $address["telephone"] }}<br>
                    <b>Email:</b><br>
                    <a href="mailto:{{ $address["email"] }}">{{ $address["email"] }}</a><br>
                </p>
            </div>
            <div class="col-md-4 copyright">
                <img src="{{asset("img/rdc_logo_fullsize_desat.png")}}" alt="logo">
                <p class="text-small">Copyright ©Red Diamond Coatings, Inc.</p>
                <p>All Rights Reserved</p>
            </div>
            <div class="col-md-4">
                <h2>Lifetime warrenty</h2>
                <p>
                    RDC carries a LIFETIME Warranty against paint failure related to the
                    properties and performance of the coating. Because <a class='hidelogin' href="{{ route('login') }}">RDC</a> has such an
                    extraordinary product life, this will reduce the need for future recoats
                    preserving our precious natural recourses and lessening the burden on
                    our landfills due to less use and less disposal of plastic and metal paint
                    cans and lids.
                </p>
                <!-- <a class='hidelogin' href="{{ route('login') }}">Login</a> -->
                {{-- <div class="admin-login">
                    <h2>Administator login</h2>
                    <form class="" action="" method="">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="username" value="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" value="">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-defualt" name="login" value="login">
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
