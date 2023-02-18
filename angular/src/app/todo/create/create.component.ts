import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { NavigationExtras, Router } from '@angular/router';
import { TodoService } from 'src/app/service/todo.service';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {
  categorias: string[] = ['Padaria', 'Açougue' , 'Mercearia', 'Hortifrúti', 'Bebidas', 'Limpeza']

  form!: FormGroup

  constructor(
    private formBuilder: FormBuilder,
    private router: Router,
    private todoService: TodoService
  ) { }

  ngOnInit(): void {
    this.initForm()
  }

  initForm(): void {
    this.form = this.formBuilder.group({
      nome: [ null , [Validators.required]],
      quantidade: [ null , [Validators.required, Validators.min(1), Validators.max(2000)]],
      categoria: [ null , [Validators.required]],
    })
  }

  OnSubmit(): void {
    if(this.form.invalid){
      return
    }
    this.todoService.set(this.form.value)

    this.router.navigate([
      '/todo/list'
    ])
  }
  get f(){
    return this.form.controls;
  }
}
