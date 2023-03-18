
<aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav nav-pills nav-sidebar flex-column mt-3" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href=" {{ route('personal.main.index') }} " class="nav-link">
                        <p>
                            Главная
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.liked.index') }}" class="nav-link">
                        <p>
                            Понравившиеся посты
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('personal.comment.index') }} " class="nav-link">
                        <p>
                            Коментраии
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar -->
</aside>
