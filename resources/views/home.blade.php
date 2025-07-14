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
                This is a simple array display: 
                <span class="array-display">
                    {{ $users[0] }}, {{ $users[1] }}, {{ $users[2] }}, {{ $users[3] }}
                </span>
            </h3>
        </h2>

        <!-- anchor tag -->
        <h2>Anchor tag</h2>
        <ul>
            <li><a href="{{ url('about/rajiv') }}">About</a></li>
            <li><a href="{{ url('contact/98765432') }}">Contact</a></li>
        </ul>

        <!-- loops -->
        <h2>Loops</h2>
        <h3>
            <ol>
                <li>
                    for loop :
                    <p>
                        @for($i=0; $i<=10; $i++)
                            <span>{{ $i }}</span>
                        @endfor
                    </p>
                </li>
                <li>
                    forEach loop :
                    <p>
                        @foreach($users as $user)
                            <span>{{ $user }}</span>
                        @endforeach
                    </p>
                </li>
            </ol>
        </h3>
    </div>

    <hr><hr>

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
                @includeIf("common.header", ["name" => "Rajiv kumar"])
            </h3>
        </div>
    </div>

    <hr><hr>

    <div class="components">
        <h1>Components</h1>
        <div>
            <x-message-banner 
                heading="Add success message banner content with home page here." 
                msg="This is a success message. Everything is working fine!" 
                class="success" />

            <x-message-banner 
                heading="Add error message banner content with home page here." 
                msg="This is an error message. Something went wrong!" 
                class="error" />
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Segoe UI', 'Poppins', Arial, sans-serif;
        background: linear-gradient(120deg, #e0e0e0 0%, #bdbdbd 100%);
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }
    .main-container {
        max-width: 900px;
        margin: 40px auto;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 32px 0 rgba(60,60,60,0.13);
        padding: 38px 32px 32px 32px;
    }
    h1 {
        color: #fd7e50;
        font-size: 2.1rem;
        margin-bottom: 18px;
        font-weight: 700;
    }
    h2 {
        color: #1976d2;
        font-size: 1.4rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    h3 {
        color: #333;
        font-size: 1.1rem;
        margin-bottom: 12px;
        font-weight: 500;
    }
    .subView, .components {
        margin-top: 32px;
        padding: 24px 18px;
        background: #f7f7f7;
        border-radius: 14px;
        box-shadow: 0 2px 8px rgba(60,60,60,0.06);
    }
    .subView h1, .components h1 {
        color: #fd7e50;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }
    ul {
        padding-left: 18px;
        margin-bottom: 18px;
    }
    li {
        margin-bottom: 7px;
        font-size: 1rem;
    }
    ol {
        padding-left: 22px;
    }
    .success {
        color: green;
        border: 1px solid green;
        padding: 10px;
        background: #eafbe7;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .error {
        color: red;
        border: 1px solid red;
        padding: 10px;
        background: #fdeaea;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .warning {
        color: orange;
        border: 1px solid orange;
        padding: 10px;
        background: #fff8e1;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .array-display {
        font-weight: 600;
        color: orange;
        background: #fff8e1;
        padding: 6px 12px;
        border-radius: 6px;
        display: inline-block;
    }
    hr {
        border: none;
        border-top: 1.5px solid #eee;
        margin: 32px 0 18px 0;
    }
</style>