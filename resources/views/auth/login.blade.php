<x-layout>
  <x-page-heading>login</x-page-heaing>

 <x-forms.form method="POST" action="/login">
 <x-forms.input name="email" label="email"/>
 <x-forms.input name="password" label="password" type="password"/>
 <x-forms.button>Login</x-forms.button>
 </x-forms.form>

</x-layout>