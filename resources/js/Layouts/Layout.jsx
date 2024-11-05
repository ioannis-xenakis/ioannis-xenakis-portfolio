export default function Layout({children}) {
    return (
        <>
            <header>
                <nav>
                    <div className="nav-bar-menu-buttons">
                        <a className="nav-bar-menu-font" href="/">Home</a>
                        <a className="nav-bar-menu-font" href="/about">About</a>
                        <a className="nav-bar-menu-font" href="/projects">Projects</a>
                    </div>
                </nav>
            </header>

            <main>
                {children}
            </main>
        </>
    )
}