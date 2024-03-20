<!-- resources/views/header.blade.php -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 10%; height: 10%;"
                    src="https://imgs.search.brave.com/Y2amAtUn2KuQmNcdLCmoFPg0LbYsgFBghjPg97Fv5Lg/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9sb2dv/LmNvbS9pbWFnZS1j/ZG4vaW1hZ2VzL2t0/czkyOHBkL3Byb2R1/Y3Rpb24vMDA4OWI3/YWUxZWQzOTRmMDQx/YzVmNzkyOWUxMTFj/MTFlOGVhZmU0ZC00/MjR4NDIxLnBuZz93/PTEwODAmcT03Mg"
                    alt=""></a>
            <!-- Add your navigation links here -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: blue;">
                <ul class="navbar-nav ml-auto"
                    style=" margin-left:-90%; width:200%; justify-content:space-evenly; background-color: yellow;">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Order</a>
                    </li>
                    <li class="nav-item" style="display: flex; align-items: center;"> <!-- Added style here -->
                        <input type="text" class="search-input" name="query" placeholder="Search"
                            style="margin-right: 5px;">
                        <button style="margin-top:-4% " type="submit" class="search-button">Search</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Cart</a>
                    </li>
                    <!-- Add more navigation links as needed -->
                </ul>
            </div>
        </div>
    </nav>
</header>
