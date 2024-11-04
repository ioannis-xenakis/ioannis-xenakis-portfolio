export default function Layout({children}) {
    return (
        <>
            <header>
                <nav>
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/projects">Projects</a>
                </nav>
            </header>

            <main>
                {children}
            </main>
        </>
    )
}