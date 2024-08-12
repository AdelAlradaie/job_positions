<x-layout>
  <x-page-heading>Register</x-page-heaing>
  <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
<x-forms.input name="name" label="Your name"/>
<x-forms.input name="email" label="email" type="email"/>
<x-forms.input name="password" label="password" type="password"/>
<x-forms.input name="password_confirmation" label="password confirmation" type="password"/>
<x-forms.divider/>
<x-forms.input name="employer" label="employer name"/>
<x-forms.input name="logo" label="logo" type="file" />
<x-forms.button>Create Account</x-forms.button>
  </x-forms.form>
</x-layout>