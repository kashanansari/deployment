<!-- Add this code to display the images -->
<div>
    <h2>All Images</h2>
    <div class="passport-images">
        @foreach($employees as $employee)
            <div class="passport-image-container">
                <img src="{{ asset($employee->image) }}" alt="{{ $employee->emp_name }}" class="passport-image">
            </div>
        @endforeach
    </div>
</div>

<style>
    /* Add this CSS code to style the images */
    .passport-images {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* Adjust the gap between images */
    }

    .passport-image-container {
        width: 150px; /* Set the width of each image container */
        height: 200px; /* Set the height of each image container */
        overflow: hidden;
    }

    .passport-image {
        width: 100%; /* Make the image fill the container */
        height: auto; /* Maintain the aspect ratio */
    }
</style>
