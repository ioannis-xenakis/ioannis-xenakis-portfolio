import { Link } from '@inertiajs/react'
export default function Layout({children}) {
    return (
        <>
            <header>
                <nav className="nav-bar">
                    <div className="nav-bar-person-name-text">
                        John Xenakis
                    </div>
                    <div className="nav-bar-menu-buttons">
                        <Link className="nav-bar-menu-font" href="/">Home</Link>
                        <Link className="nav-bar-menu-font" href="/about">About</Link>
                        <Link className="nav-bar-menu-font" href="/projects">Projects</Link>
                    </div>
                </nav>
            </header>

            <main>
                {children}
            </main>
        </>
    )
}