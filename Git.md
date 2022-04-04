# Comandos útiles GIt


1-   `git init` inicializa la carpeta

# Entrada a Stage
2-   `git add .` Añade todos archivos al proyecto git
3-   git reset . Contrario a `git add`

# Snapshot
4-   `git commit` o `git commit -m "primer commit"` 
4.1- `git commit --amend` tecla `i` , salir `esc + :wq!`

#  Stage + Snapshot
`git commit -am ""`

# Vuelta Atrás
5-   `git checkout -- .` Volver a la version anterior de todos los archivos

# LOGS
6-   `git log` Ver Logs

# Branches ( RAMAS )
7-   `git checkout -b rama-segunda` crear Rama
7.1  `git branch`

# Copiar Archivos a Master
`git checkout master` Moverse a la rama Master

# Merge 
`git merge rama-segunda` 

# Eliminar ramas
`git branch -d rama-segunda`


# Pasar a repositorios Externos
`git remote add origin https://github.com/j0rd1s3rr4n0/DKIA.git`

`git branch -M main`

`git push -u origin main`
