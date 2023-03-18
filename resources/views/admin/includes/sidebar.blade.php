
<aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav nav-pills nav-sidebar flex-column mt-3" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href=" {{ route('admin.index') }} " class="nav-link">
                        <p>
                            Главная
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('admin.user.index') }} " class="nav-link">
                        <p>
                            Пользователи
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('admin.category.index') }} " class="nav-link">
                        <p>
                            Категории
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('admin.tag.index') }} " class="nav-link">
                        <p>
                            Теги
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('admin.post.index') }} " class="nav-link">
                        <p>
                            Посты
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar -->
</aside>
