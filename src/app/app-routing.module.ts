import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'slider-principal',
    pathMatch: 'full'
  },
  {
    path: 'pagina-principal',
    loadChildren: () => import('./components/pagina-principal/pagina-principal.module').then( m => m.PaginaPrincipalPageModule)
  },
  {
    path: 'slider-principal',
    loadChildren: () => import('./components/slider-principal/slider-principal.module').then( m => m.SliderPrincipalPageModule)
  },
  {
    path: 'formulari',
    loadChildren: () => import('./components/formulari/formulari.module').then( m => m.FormulariPageModule)
  },
  {
    path: 'llistat',
    loadChildren: () => import('./components/llistat/llistat.module').then( m => m.LlistatPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
