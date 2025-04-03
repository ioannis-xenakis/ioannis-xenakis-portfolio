import { Link, router } from "@inertiajs/react";
import { usePage } from "@inertiajs/react";
export default function Layout({ children }) {
    const { url } = usePage();
    function NavLink({ href, children, isActive }) {
        return (
            <Link
                href={href}
                className={
                    isActive ? "nav-bar-menu-font active" : "nav-bar-menu-font"
                }
            >
                {children}
            </Link>
        );
    }
    return (
        <>
            <header>
                <nav className="nav-bar">
                    <div className="nav-bar-person-name-text">John Xenakis</div>
                    <div className="nav-bar-menu-buttons">
                        <NavLink isActive={url === "/"} href="/">
                            Home
                        </NavLink>
                        <NavLink isActive={url === "/about"} href="/about">
                            About
                        </NavLink>
                        <NavLink
                            isActive={url === "/projects"}
                            href="/projects"
                        >
                            Projects
                        </NavLink>
                    </div>
                </nav>
            </header>

            <main>{children}</main>
        </>
    );
}
