<div class="filter-wrapper">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <div class="perpage">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <select name="perpage" id="" class="form-control input-sm perpage filter mr10">
                    @for($i = 20; $i <=200; $i++)
                    <option value="{{ $i }}">{{ $i }} bản ghi</option>
                    @endfor
                </select>
            </div>
        </div>
        
        <div class="action">
            <div class="uk-flex uk-flex-middle">
                <select name="user_catalohue" class="form-control mr10" id="">
                    <option value="0" selected="selected">
                        chọn nhóm thành viên
                    </option>
                    <option value="1">Quản trị viên</option>
                </select>
                <div class="uk-search uk-flex uk-flex-middle mr10">
                    <div class="input-group ">
                        <span class="input-group-btn">
                            <button 
                                type="submit" 
                                name="seach" 
                                value="search" 
                                class="btn btn-primary mb0 btn-sm"> Tìm kiếm
                            </button>
                        </span>
                    </div>
                </div>
                <a href="{{route('moreUser')}}" class="btn btn-danger"><i class="bi bi-plus-circle-dotted"></i>
                    Thêm mới thành viên
                </a>
            </div>

        </div>
    </div>
</div>