import Link from "next/link";

type Props = {
  active?: "about" | "skills" | "education" | "experience" | "projects";
};

const items = [
  { label: "About", href: "/#about", key: "about" },
  { label: "Skills", href: "/#skills", key: "skills" },
  { label: "Education", href: "/#education", key: "education" },
  { label: "Experience", href: "/#experience", key: "experience" },
  { label: "Projects", href: "/#projects", key: "projects" },
] as const;

export function SiteHeader({ active }: Props) {
  return (
    <header className="sticky top-0 z-50 border-b-[3px] border-[#1b1b1b] bg-[#f7f7f3]/95 backdrop-blur">
      <div className="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <Link href="/" className="font-display text-3xl font-black tracking-tighter">
          GHETSA.DEV
        </Link>
        <nav className="hidden items-center gap-8 md:flex">
          {items.map((item) => (
            <Link
              key={item.key}
              href={item.href}
              className={`font-semibold transition-colors hover:text-[#556500] ${active === item.key ? "text-[#556500] underline decoration-2 underline-offset-8" : "text-[#1b1b1b]"}`}
            >
              {item.label}
            </Link>
          ))}
        </nav>
        <Link
          href="/#contact"
          className="border-[3px] border-[#1b1b1b] bg-[#fdb6e9] px-5 py-3 font-bold uppercase tracking-widest shadow-[4px_4px_0_0_#1b1b1b]"
        >
          Let&apos;s Talk
        </Link>
      </div>
    </header>
  );
}
