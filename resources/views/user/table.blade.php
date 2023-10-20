<table class="table">
    <thead>
    <tr>
        <td>
            <input type="checkbox" value="" id="checkALL" class="input-checkbox"> 
        </td>
        <th>Tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th class="text-center">Tình trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>

        @if (isset($users))
            @foreach ($users as $user)
                    <tr> 
                        <td>
                            <input type="checkbox" value="" class="input-checkbox checkBoxItem">
                        </td>
                        <td>
                            {{ $user->name}}
                        </td>
                        <td>
                            {{ $user->email}}
                        </td>
                        <td>
                            {{ $user->address}}
                        </td>
                        
                        <td class="text-center">
                            <input type="checkbox" class="js-switch" checked />
                        </td>
                        <td class="text-center">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success" style="zoom: .65">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>    
            @endforeach 
        @endif
    </tbody>
</table>

