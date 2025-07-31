<x-layout>
    <x-slot name="title">Create Job</x-slot>
    
    <h1>Create New Jobs</h1>
    <form action="/jobs" method="POST">
        @csrf <!-- CSRF token for security -->
        <input type="text" name="title" placeholder="Job Title">
        <input type="text" name="description" placeholder="Job Description">
        <button type="submit">Submit</button>
    </form>
</x-layout>

