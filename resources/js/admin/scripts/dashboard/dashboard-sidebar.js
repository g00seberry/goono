let sidebarToggle = document.getElementById('dashboard_sidebar_toggle');
let sidebar = document.getElementById('dashboard_sidebar');

sidebarToggle.addEventListener('click',toggleSidebar);

function toggleSidebar()
{
    sidebar.classList.toggle('dashboard__sidebar-active');
}
