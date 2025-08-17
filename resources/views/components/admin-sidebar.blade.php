<ul class="unstyled bg-white flex flex-col p-5 gap-4">
    <li class="flex gap-2 p-3 rounded-md cursor-pointer bg-purple-600 text-white items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
        Dashboard
    </li>
    <li class="flex gap-2 p-3 assignment-dropdown rounded-md relative cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        Courses
        <ul
            class="unstyled bg-white z-3 shadow-xl hidden py-4 px-1 absolute bg-white top-12 w-max rounded-md border border-gray-200">
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                Add Course
            </li>
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                View Course
            </li>

        </ul>
    </li>
    <li class="flex gap-2 p-3 assignment-dropdown rounded-md relative cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        User
        <ul
            class="unstyled bg-white z-3 assignment-dropdown-menu shadow-xl hidden py-4 px-1 absolute bg-white top-12 w-max rounded-md border border-gray-200">
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                Add Users
            </li>
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                View Users
            </li>

        </ul>
    </li>
    <li class="flex gap-2 p-3 assignment-dropdown rounded-md relative cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        Batches
        <ul
            class="unstyled bg-white  shadow-xl hidden py-4 px-1 absolute bg-white top-12 w-max rounded-md border border-gray-200">
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                Add Batch
            </li>
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                View Batch
            </li>
            <li
                class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold assignment-list">
                <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
                Assign Batch
            </li>

        </ul>
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/logout.webp" width="30px" alt="">
        Logout
    </li>

</ul>


<script>
    $('.assignment-dropdown').on('click', function() {
        $('.assignment-dropdown-menu').toggle('hidden')
    })
</script>
