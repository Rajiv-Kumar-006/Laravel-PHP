<div class="main-container">
    <h1>
        Hello, This is the Home Page.
    </h1>

    <h3>
        This page serves as the landing page for our application.
    </h3>

    <div>
        <!-- array -->
        <h2>
            Display Array
            <h3>
                This is a simple array display: <span style="color: orange;">{{ $users[0] }}, {{ $users[1] }}, {{ $users[2] }}, {{ $users[3] }}</span>
            </h3>
        </h2>
        <!-- anchor tag -->
        <h2>Anchor tag</h2>
        <ul>
            <li><a href="/about/rajiv">About</a></li>
            <li><a href="/contact/98765432">Contact</a></li>
        </ul>

        <!-- loops -->
        <h2>Loops</h2>
        <h3>
            <ol>
                <li>
                    for loop :
                    <p>
                        @for($i=0; $i<=10; $i++)
                            <span>{{ $i}}</span>
                            @endfor
                    </p>
                </li>
                <li>
                    forEach loop :
                    <p>
                        @foreach($users as $user)
                        <span>{{ $user}}</span>
                        @endforeach
                    </p>
                </li>

            </ol>

        </h3>
    </div>
    <hr>
    <hr>

    <div class="subView">
        <div>
            <h1> Sub View</h1>
            <h3>
                @includeIf("common.header")
            </h3>
        </div>
        <div>
            <h1>Pass data home page to header page</h1>
            <h3>
                @includeIf("common.header",["name" => "Rajiv kumar"])
            </h3>
        </div>
    </div>
    <hr>
    <hr>

    <div class="components">
        <h1>Components</h1>
        <div>
            <x-message-banner heading="Add success message banner content with home page here." msg=" This is a success message. Everything is working fine!" class="success" />

            <x-message-banner heading="Add error message banner content with home page here." msg=" This is an error message. Something went wrong!" class="error" />
        </div>
    </div>

</div>


<style>
    .success {
        color: green;
        border: 1px solid green;
        padding: 10px;
    }

    .error {
        color: red;
        border: 1px solid red;
        padding: 10px;
    }

    .warning {
        color: orange;
        border: 1px solid orange;
        padding: 10px;
    }
</style>

<!-- if else -->
<!-- <h1>Hello, This is the Home Page.</h1>

<h3>This page serves as the landing page for our application.</h3> -->

<!-- <div>
    <h2>Display Array</h2>

    @if($user[0] === 'Rajiv')
        <h3 style="color: green;">
            Welcome, {{ $user[0] }}! You are a registered user.
        </h3>
    @elseif($user[1] === 'Admin')
        <h3 style="color: orange;">
            Hello Admin! Manage your site wisely.
        </h3>
    @else
        <h3 style="color: red;">
            Hello, Guest!
        </h3>
    @endif

    <ul>
        <li><a href="/about/rajiv" style="color: red;">About</a></li>
        <li><a href="/contact/98765432" style="color: teal;">Contact</a></li>
    </ul>
</div> -->