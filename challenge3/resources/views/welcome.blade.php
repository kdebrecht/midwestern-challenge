<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Challenge Accepted</title>
    </head>
    <style>

        a{
            padding:0px;
            margin:0px;
            font-size: 30px;
            padding-left: 10px;

            font-weight: bold;
            font-family: 'Courier New', Courier, monospace
        }
        ol{
            font-size: 30px;

        }

        li{
            margin-bottom: 4px;
        }
    </style>
    <body>
        <ol>
            <li>
                <h1>
                    Content
                </h1>
                <ul>
                    <li><a href="{{ Route('content.create') }}" >New Content </a></li>
                    <li><a href="{{ Route('content.all') }}" >Show All </a></li>
                </ul>
            </li>
            <li>
                <h1>
                    Contacts
                </h1>
                <ul>
                    <li><a href="{{ Route('contact.create') }}" >New Contact </a></li>
                    <li><a href="{{ Route('contact.all') }}" >Show All </a></li>
                </ul>

            </li>
        </ol>
    </body>
</html>
