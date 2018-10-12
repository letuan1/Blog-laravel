<div class="wrap-input100 validate-input" data-validate="Name is required" >
    <span class="label-input100">Title:</span>
    <input class="input100" type="text" name="title" placeholder="Enter title" value="{{ isset($blogs['title']) ? $blogs['title'] : '' }}">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    <span class="label-input100">Brief content:</span>
    <input class="input100" type="text" name="content" placeholder="Enter brief content" value="{{ isset($blogs['content']) ? $blogs['content'] : '' }}">
    <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Message is required">
    <span class="label-input100">Content:</span>
    <input class="input100" name="noidung" placeholder="Enter content" value="{{ isset($blogs['noidung']) ? $blogs['noidung'] : '' }}">
    <span class="focus-input100"></span>
</div>

<div class="container-contact100-form-btn">
    <button class="contact100-form-btn">
		<span>
		    Submit
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
        </span>
    </button>
</div>
