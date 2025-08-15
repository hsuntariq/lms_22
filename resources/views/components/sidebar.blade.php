<ul class="unstyled flex flex-col p-5 gap-4">
    <li class="flex gap-2 p-3 rounded-md cursor-pointer bg-purple-600 text-white items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
        Dashboard
    </li>
    <li class="flex gap-2 p-3 assignment-dropdown rounded-md relative cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        Assignment
        <ul
            class="unstyled assignment-dropdown-menu shadow-xl hidden py-4 px-1 absolute bg-white top-12 w-max rounded-md border border-gray-200">
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                View Assigments
            </li>
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                Upload Assignments
            </li>
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                All Assignments
            </li>
        </ul>
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/attendance.png" width="30px" alt="">
        Attendance
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/settings.png" width="30px" alt="">
        Settings
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/logout.webp" width="30px" alt="">
        Logout
    </li>

</ul>


<script>
    $('.assignment-dropdown').on('click', function() {
        $('.assignment-dropdown-menu').removeClass('hidden')
    })
</script>
