<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Andersen Task</title>
    </head>

    <body>
        <main>
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                <textarea name="message" id="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                <button type="submit" class="submit-btn">Submit</button>
            </form>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @if (count($content))
                <div id="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Create date</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($content as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->message }}</td>
                                <td>{{ $value->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </main>
    </body>
</html>
