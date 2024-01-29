<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="#" onclick="window.location.href = '{{ route('client.home') }}'"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="{{ url('/add') }}"><i class="fas fa-plus-circle"></i>Add Jobs</a></li>
            <li><a href="{{ url('/reveiw') }}"><i class="fas fa-exclamation-circle"></i>Reveiw Jobs</a></li>
            <li><a href="{{ url('/appliedjobsview') }}"><i class="fas fa-star"></i>Applied Jobs</a></li>
        </ul>

    </div>
